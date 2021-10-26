<?php

use Elementor\Controls_Manager;
use Elementor\Scheme_Color;

class Elementor_STM_Iconboxes_With_Tabs extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'stm_iconboxes_with_tabs';
    }

    public function get_title()
    {
        return esc_html__( 'Iconboxes with tabs', 'consulting-elementor-widgets' );
    }

    public function get_icon()
    {
        return 'fa fa-calendar-week';
    }

    public function get_categories()
    {
        return [ 'consulting-widgets' ];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'section_1',
            [
                'label' => __( 'Tab 1', 'consulting-elementor-widgets' ),
            ]
        );
        $this->add_control(
            'tab_id', [
                'label' => __('Unique ID', 'elementor'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Unique ID', 'elementor'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tab_name', [
                'label' => __( 'Tab name', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter tab name', 'consulting-elementor-widgets' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'content_title',
            [
                'label' => __( 'Content info', 'consulting-elementor-widgets' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => '<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'consulting-elementor-widgets' ) . '</p>',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'icons',
            [
                'label' => __( 'Icons', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => __( 'Title', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your title', 'consulting-elementor-widgets' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'icon_info',
            [
                'label' => __( 'Enter your text', 'consulting-elementor-widgets' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your text', 'consulting-elementor-widgets' ),
                'label_block' => true,
                'rows' => 5,
            ]
        );
        $this->add_control(
            'icon_sections',
            [
                'label' => __( 'Icon', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'title' => __( 'Icon 1', 'consulting-elementor-widgets' ),
                    ],
                ],
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_2',
            [
                'label' => __( 'Tab 2', 'consulting-elementor-widgets' ),
            ]
        );
        $this->add_control(
            'tab_id_2', [
                'label' => __('Unique ID', 'elementor'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Unique ID', 'elementor'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tab_name_2', [
                'label' => __( 'Tab name', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter tab name', 'consulting-elementor-widgets' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'content_title_2',
            [
                'label' => __( 'Content info', 'consulting-elementor-widgets' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => '<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'consulting-elementor-widgets' ) . '</p>',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'icons',
            [
                'label' => __( 'Icons', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => __( 'Title', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your title', 'consulting-elementor-widgets' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'icon_info',
            [
                'label' => __( 'Enter your text', 'consulting-elementor-widgets' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your text', 'consulting-elementor-widgets' ),
                'label_block' => true,
                'rows' => 5,
            ]
        );
        $this->add_control(
            'icon_sections_2',
            [
                'label' => __( 'Icon', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'title' => __( 'Icon 1', 'consulting-elementor-widgets' ),
                    ],
                ],
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_3',
            [
                'label' => __( 'Tab 3', 'consulting-elementor-widgets' ),
            ]
        );
        $this->add_control(
            'tab_id_3', [
                'label' => __('Unique ID', 'elementor'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Unique ID', 'elementor'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tab_name_3', [
                'label' => __( 'Tab name', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter tab name', 'consulting-elementor-widgets' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'content_title_3',
            [
                'label' => __( 'Content info', 'consulting-elementor-widgets' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => '<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'consulting-elementor-widgets' ) . '</p>',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'icons',
            [
                'label' => __( 'Icons', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => __( 'Title', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your title', 'consulting-elementor-widgets' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'icon_info',
            [
                'label' => __( 'Enter your text', 'consulting-elementor-widgets' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your text', 'consulting-elementor-widgets' ),
                'label_block' => true,
                'rows' => 5,
            ]
        );
        $this->add_control(
            'icon_sections_3',
            [
                'label' => __( 'Icon', 'consulting-elementor-widgets' ),
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'title' => __( 'Icon 1', 'consulting-elementor-widgets' ),
                    ],
                ],
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $icons_tabs = array(
            'tab1' => array(
                'id' => $settings['tab_id'],
                'name' => $settings['tab_name'],
                'class' => 'active'
            ),
            'tab2' => array(
                'id' => $settings['tab_id_2'],
                'name' => $settings['tab_name_2'],
                'class' => ''
            ),
            'tab3' => array(
                'id' => $settings['tab_id_3'],
                'name' => $settings['tab_name_3'],
                'class' => ''
            )
        );

        $icons_tabs_content = array(
            'tab1' => array(
                'id' => $settings['tab_id'],
                'content_title' => $settings['content_title'],
                'icons' => $settings['icon_sections'],
                'class' => 'active'
            ),
            'tab2' => array(
                'id' => $settings['tab_id_2'],
                'content_title' => $settings['content_title_2'],
                'icons' => $settings['icon_sections_2'],
                'class' => ''
            ),
            'tab3' => array(
                'id' => $settings['tab_id_3'],
                'content_title' => $settings['content_title_3'],
                'icons' => $settings['icon_sections_3'],
                'class' => ''
            ),
        )

        ?>
        <div class="icon_box_with_tabs">
            <div class="icon_box_tab_links">
                <?php foreach ( $icons_tabs as $tab ): ?>
                    <a href="javascript:void(0);" class="icon_box_tab_link <?php echo esc_attr( $tab['class'] ); ?>" onclick="openCity(event, '<?php echo esc_attr($tab['id']); ?>')"><?php echo esc_attr( $tab['name'] ); ?></a>
                <?php endforeach; ?>
            </div>
            <?php foreach ( $icons_tabs_content as $content ): ?>
            <div id="<?php echo esc_attr( $content['id'] ); ?>" class="icon_box_tab_content <?php echo esc_attr( $content['class'] ); ?>">

                <div class="icon_box_content_info">
                    <?php echo $content['content_title']; ?>
                </div>
                <?php if( isset( $content['icons'] ) ) : ?>
                <div class="icon_box_icons">
                    <ul>
                    <?php foreach( $content['icons'] as $icon ): ?>
                        <li>
                            <div class="icon_box_icon">
                            <?php if( $icon['icons']['library'] != 'svg'): ?>
                                <i class="<?php echo esc_attr( $icon['icons']['value'] ); ?>"></i>
                            <?php else: ?>
                                <img src="<?php echo esc_url( $icon['icons']['value']['url'] ); ?>" alt="<?php echo esc_attr( $icon['title'] ); ?>" />
                            <?php endif;?>
                            </div>
                            <div class="icon_box_info">
                                <div class="icon_box_title"><?php echo esc_attr( $icon['title'] ); ?></div>
                                <div class="icon_box_description"><?php echo esc_attr( $icon['icon_info'] ); ?></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>
        </div>

        <script>
            function openCity(evt, cityName) {
                var i, icon_box_tab_content, icon_box_tab_links;
                icon_box_tab_content = document.getElementsByClassName("icon_box_tab_content");
                for (i = 0; i < icon_box_tab_content.length; i++) {
                    icon_box_tab_content[i].style.display = "none";
                }
                icon_box_tab_link = document.getElementsByClassName("icon_box_tab_link");
                for (i = 0; i < icon_box_tab_link.length; i++) {
                    icon_box_tab_link[i].className = icon_box_tab_link[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "flex";
                evt.currentTarget.className += " active";
            }
        </script>

    <?php
    }
}