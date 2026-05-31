<?php
/**
 * Admin Pages Creator — One-click tool to create editable WordPress pages
 * for all virtual page slugs.
 *
 * Once created, pages become fully editable from WP admin (title, content,
 * featured image, SEO fields, Gutenberg/Classic editor).
 *
 * HOW IT WORKS:
 * 1. Go to Appearance → पृष्ठ बनाएँ
 * 2. Click "सभी बाकी पृष्ठ बनाएँ"
 * 3. All pages appear in Pages menu — fully editable
 * 4. Frontend admin bar shows "Edit Page" for all pages
 * 5. Theme templates render the content automatically
 *
 * @package GoldenRashifal
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add admin menu item under Appearance.
 */
function golden_rashifal_admin_pages_menu() {
    add_theme_page(
        'पृष्ठ बनाएँ — Golden Rashifal',
        'पृष्ठ बनाएँ',
        'manage_options',
        'gr-create-pages',
        'golden_rashifal_admin_pages_render'
    );
}
add_action( 'admin_menu', 'golden_rashifal_admin_pages_menu' );

/**
 * Render the admin page.
 */
function golden_rashifal_admin_pages_render() {

    // Handle form submission.
    if ( isset( $_POST['gr_create_pages_nonce'] ) && wp_verify_nonce( $_POST['gr_create_pages_nonce'], 'gr_create_pages' ) ) {
        $created = golden_rashifal_create_all_pages();
        echo '<div class="notice notice-success"><p>' . sprintf( '%d पृष्ठ बनाए गए। अब आप Pages मेनू से इन्हें edit कर सकते हैं।', $created ) . '</p></div>';
    }

    $pages = golden_rashifal_virtual_pages();
    $existing = 0;
    $missing = 0;

    foreach ( $pages as $slug => $data ) {
        $page = get_page_by_path( $slug );
        if ( $page ) {
            $existing++;
        } else {
            $missing++;
        }
    }

    ?>
    <div class="wrap">
        <h1>Golden Rashifal — पृष्ठ प्रबंधन</h1>
        <p>यह tool सभी theme pages को real WordPress pages में बदल देता है।<br>
        बनाने के बाद आप हर page को WordPress admin से edit कर सकते हैं — title, content, SEO, featured image सब।</p>

        <div style="background:#fff;border:1px solid #ddd;border-radius:8px;padding:20px;max-width:600px;margin:20px 0;">
            <h3 style="margin-top:0;">स्थिति</h3>
            <table class="widefat" style="border:none;box-shadow:none;">
                <tr><td><strong>कुल registered pages:</strong></td><td><strong><?php echo count( $pages ); ?></strong></td></tr>
                <tr><td>WordPress में editable:</td><td style="color:green;font-weight:bold;"><?php echo $existing; ?></td></tr>
                <tr><td>Virtual fallback (edit नहीं हो सकते):</td><td style="color:<?php echo $missing > 0 ? 'orange' : 'green'; ?>;font-weight:bold;"><?php echo $missing; ?></td></tr>
            </table>

            <?php if ( $missing > 0 ) : ?>
            <form method="post" style="margin-top:16px;">
                <?php wp_nonce_field( 'gr_create_pages', 'gr_create_pages_nonce' ); ?>
                <button type="submit" class="button button-primary button-hero">सभी <?php echo $missing; ?> पृष्ठ WordPress में बनाएँ</button>
                <p class="description" style="margin-top:8px;">बनाने के बाद: Pages → All Pages → Edit करें।<br>Frontend पर admin bar में "Edit Page" button दिखेगा।</p>
            </form>
            <?php else : ?>
            <p style="color:green;font-weight:bold;margin-top:12px;">सभी पृष्ठ WordPress में मौजूद हैं। Pages → All Pages से edit करें।</p>
            <?php endif; ?>
        </div>

        <h2 style="margin-top:30px;">सभी पृष्ठों की सूची</h2>
        <table class="widefat striped" style="max-width:900px;">
            <thead>
                <tr>
                    <th>URL</th>
                    <th>शीर्षक</th>
                    <th>स्थिति</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ( $pages as $slug => $data ) :
                $page = get_page_by_path( $slug );
                ?>
                <tr>
                    <td><code style="font-size:12px;">/<?php echo esc_html( $slug ); ?>/</code></td>
                    <td><?php echo esc_html( $data['title'] ); ?></td>
                    <td>
                        <?php if ( $page ) : ?>
                            <span style="color:green;font-weight:500;">Editable</span>
                        <?php else : ?>
                            <span style="color:#b45309;">Virtual only</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ( $page ) : ?>
                            <a href="<?php echo get_edit_post_link( $page->ID ); ?>" class="button button-small">Edit</a>
                        <?php else : ?>
                            <span style="color:#999;">—</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <div style="background:#f0f8ff;border:1px solid #b3d4fc;border-radius:6px;padding:16px;max-width:700px;margin:30px 0;">
            <h3 style="margin:0 0 8px;">कैसे काम करता है?</h3>
            <ol style="margin:0;padding-left:20px;font-size:13px;line-height:1.8;">
                <li>ऊपर बटन दबाकर pages बनाएँ</li>
                <li>Pages → All Pages में जाएँ</li>
                <li>किसी भी page को click करके edit करें (title, content, meta, image सब)</li>
                <li>Content save करते ही frontend पर automatically दिखने लगेगा — कोई code change ज़रूरी नहीं</li>
                <li>अगर editor में content empty हो तो theme का default layout दिखेगा (fallback)</li>
                <li>Frontend पर login होने पर admin bar में "Edit Page" button दिखेगा</li>
                <li>URL structure और SEO structure वैसा ही रहेगा</li>
            </ol>
            <p style="margin:10px 0 0;font-size:12px;color:#1d4ed8;font-weight:600;">✅ नई प्रणाली: WP Editor content हमेशा theme के default layout से पहले दिखता है।</p>
        </div>
    </div>
    <?php
}

/**
 * Create all missing pages as real WordPress pages.
 * Returns count of pages created.
 *
 * DUPLICATE PREVENTION: Before creating any page, we check BOTH:
 *   1. get_page_by_path( $full_slug ) — finds pages with correct parent hierarchy
 *   2. get_page_by_path( $child_slug ) — finds any page with this slug (any parent)
 * This prevents WordPress auto-incrementing slugs to 'munga-2', 'manikya-2' etc.
 * which happens when a page with the same post_name already exists.
 */
function golden_rashifal_create_all_pages() {

    $pages   = golden_rashifal_virtual_pages();
    $created = 0;

    // First pass: create parent pages (non-nested slugs).
    foreach ( $pages as $slug => $data ) {
        if ( strpos( $slug, '/' ) !== false ) {
            continue; // Skip nested, handle in second pass.
        }
        // Check: does a page with this slug already exist anywhere?
        if ( get_page_by_path( $slug ) ) {
            continue;
        }
        wp_insert_post( array(
            'post_title'   => $data['title'],
            'post_name'    => $slug,
            'post_content' => '<!-- wp:paragraph --><p>यह पृष्ठ थीम द्वारा स्वचालित रूप से प्रदर्शित किया जाता है।</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_author'  => get_current_user_id(),
        ) );
        $created++;
    }

    // Second pass: create child pages (nested slugs like rashifal/mesh, ratna/munga).
    foreach ( $pages as $slug => $data ) {
        if ( strpos( $slug, '/' ) === false ) {
            continue;
        }

        $parts       = explode( '/', $slug );
        $child_slug  = end( $parts );
        $parent_slug = $parts[0];

        // ── DUPLICATE CHECK (this is where /munga-2/ was created) ──────────
        // get_page_by_path with full slug finds the page in its correct location.
        if ( get_page_by_path( $slug ) ) {
            continue; // Already exists at the correct path — skip.
        }
        // Also check by child slug alone — prevents creating a duplicate if
        // the page was already created (possibly without a parent) by
        // golden_rashifal_auto_create_pages_on_activation().
        $existing_by_slug = get_page_by_path( $child_slug );
        if ( $existing_by_slug ) {
            // Page exists with this slug. Ensure it has the correct parent.
            $parent      = get_page_by_path( $parent_slug );
            $correct_pid = $parent ? $parent->ID : 0;
            if ( (int) $existing_by_slug->post_parent !== $correct_pid ) {
                // Update parent only — do not create a new page.
                wp_update_post( array(
                    'ID'          => $existing_by_slug->ID,
                    'post_parent' => $correct_pid,
                ) );
            }
            continue; // Never insert a second page with the same slug.
        }
        // ── END DUPLICATE CHECK ─────────────────────────────────────────────

        $parent    = get_page_by_path( $parent_slug );
        $parent_id = $parent ? $parent->ID : 0;

        wp_insert_post( array(
            'post_title'   => $data['title'],
            'post_name'    => $child_slug,
            'post_content' => '<!-- wp:paragraph --><p>यह पृष्ठ थीम द्वारा स्वचालित रूप से प्रदर्शित किया जाता है।</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent_id,
            'post_author'  => get_current_user_id(),
        ) );
        $created++;
    }

    return $created;
}

/**
 * Show admin notice on Pages screen reminding about the tool.
 */
function golden_rashifal_pages_admin_notice() {
    $screen = get_current_screen();
    if ( ! $screen || 'edit-page' !== $screen->id ) {
        return;
    }

    $pages = golden_rashifal_virtual_pages();
    $missing = 0;
    foreach ( $pages as $slug => $data ) {
        if ( ! get_page_by_path( $slug ) ) {
            $missing++;
        }
    }

    if ( $missing > 0 ) {
        printf(
            '<div class="notice notice-info is-dismissible"><p><strong>Golden Rashifal:</strong> %d pages अभी virtual mode में हैं (edit नहीं हो सकते)। <a href="%s">यहाँ click करें</a> उन्हें editable बनाने के लिए।</p></div>',
            $missing,
            admin_url( 'themes.php?page=gr-create-pages' )
        );
    }
}
add_action( 'admin_notices', 'golden_rashifal_pages_admin_notice' );
