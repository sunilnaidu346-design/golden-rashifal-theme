<?php
/**
 * Admin Pages Creator — One-click tool to create editable WordPress pages
 * for all virtual page slugs.
 *
 * Once created, pages become fully editable from WP admin (title, content,
 * featured image, SEO fields, Gutenberg/Classic editor).
 *
 * The virtual-pages.php fallback only triggers on 404 — so if a real WP
 * page exists with the same slug, WordPress serves that page normally.
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
        golden_rashifal_create_all_pages();
        echo '<div class="notice notice-success"><p>सभी पृष्ठ सफलतापूर्वक बना दिए गए। अब आप Pages मेनू से इन्हें edit कर सकते हैं।</p></div>';
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
        <p>यह tool सभी virtual pages को real WordPress pages में बदल देता है ताकि आप उन्हें admin panel से आसानी से edit कर सकें।</p>

        <table class="widefat" style="max-width:600px;margin:20px 0">
            <tr><td><strong>कुल registered pages:</strong></td><td><?php echo count( $pages ); ?></td></tr>
            <tr><td><strong>WordPress में मौजूद:</strong></td><td><?php echo $existing; ?></td></tr>
            <tr><td><strong>अभी बनाने बाकी:</strong></td><td><?php echo $missing; ?></td></tr>
        </table>

        <?php if ( $missing > 0 ) : ?>
        <form method="post">
            <?php wp_nonce_field( 'gr_create_pages', 'gr_create_pages_nonce' ); ?>
            <p><button type="submit" class="button button-primary button-hero">सभी बाकी पृष्ठ बनाएँ (<?php echo $missing; ?>)</button></p>
            <p class="description">यह बटन दबाने पर सभी missing pages WordPress में create हो जाएँगे। उसके बाद Pages मेनू से edit करें।</p>
        </form>
        <?php else : ?>
        <p style="color:green;font-weight:bold;">सभी पृष्ठ पहले से मौजूद हैं। Pages मेनू से edit करें।</p>
        <?php endif; ?>

        <h2 style="margin-top:30px">पृष्ठों की स्थिति</h2>
        <table class="widefat striped" style="max-width:800px">
            <thead>
                <tr>
                    <th>Slug</th>
                    <th>शीर्षक</th>
                    <th>स्थिति</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ( $pages as $slug => $data ) :
                $page = get_page_by_path( $slug );
                ?>
                <tr>
                    <td><code>/<?php echo esc_html( $slug ); ?>/</code></td>
                    <td><?php echo esc_html( $data['title'] ); ?></td>
                    <td>
                        <?php if ( $page ) : ?>
                            <span style="color:green;">WordPress page मौजूद</span>
                        <?php else : ?>
                            <span style="color:orange;">Virtual fallback active</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ( $page ) : ?>
                            <a href="<?php echo get_edit_post_link( $page->ID ); ?>">Edit</a>
                        <?php else : ?>
                            —
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}

/**
 * Create all missing pages as real WordPress pages.
 */
function golden_rashifal_create_all_pages() {

    $pages = golden_rashifal_virtual_pages();

    foreach ( $pages as $slug => $data ) {

        // Skip if page already exists.
        $existing = get_page_by_path( $slug );
        if ( $existing ) {
            continue;
        }

        // Create the page.
        $page_data = array(
            'post_title'   => $data['title'],
            'post_name'    => sanitize_title( basename( $slug ) ),
            'post_content' => '<!-- यह पृष्ठ अभी virtual template से content दिखा रहा है। यहाँ content लिखने पर WordPress का content दिखेगा। -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_author'  => get_current_user_id(),
        );

        // Handle nested slugs like rashifal/mesh.
        if ( strpos( $slug, '/' ) !== false ) {
            $parts = explode( '/', $slug );
            $page_data['post_name'] = end( $parts );

            // Find or create parent page.
            $parent_slug = $parts[0];
            $parent = get_page_by_path( $parent_slug );
            if ( $parent ) {
                $page_data['post_parent'] = $parent->ID;
            }
        }

        wp_insert_post( $page_data );
    }
}
