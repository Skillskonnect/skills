<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;

class Elementor_STM_Portfolio_Carousel extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_portfolio_carousel';
    }

    public function get_title()
    {
        return esc_html__('Portfolio Carousel', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-info-circle';
    }

    public function get_categories()
    {
        return [ 'consulting-widgets' ];
    }

    public function add_dimensions($selector = '')
    {
        $this->start_controls_section(
            'section_dimensions',
            [
                'label' => __('Dimensions', 'consulting-elementor-widgets'),
            ]
        );

        $this->add_responsive_control(
            'margin',
            [
                'label' => __('Margin', 'plugin-domain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    "{{WRAPPER}} {$selector}" => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'padding',
            [
                'label' => __('Padding', 'plugin-domain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    "{{WRAPPER}} {$selector}" => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'plugin-name'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __( 'Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip( array(
                    esc_html__( 'Style 1', 'consulting' ) => 'style_1'
                ) ),
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => __( 'Number Posts', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 12
            ]
        );

        $this->add_control(
            'loop',
            [
                'label' => __( 'Loop', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'no',
            ]
        );

        $this->add_control(
            'nav',
            [
                'label' => __( 'Navigation', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => esc_html__('Enable carousel navigation buttons', 'plugin-domain'),
                'return_value' => 'no',
            ]
        );

        $this->add_control(
            'dots',
            [
                'label' => __( 'Pagination/Dots', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => esc_html__('Enable carousel pagination dots', 'plugin-domain'),
                'return_value' => 'no',
            ]
        );

        $this->add_control(
            'items',
            [
                'label' => __( 'Items', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__('The number of items you want to see on the screen.', 'plugin-domain'),
                'default' => 3
            ]
        );

        $this->add_control(
            'items_small_desktop',
            [
                'label' => __( 'Items (Small Desktop)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__('Number of items the carousel will display. Default: at <980px - 4 items.', 'plugin-domain'),
                'default' => 3
            ]
        );

        $this->add_control(
            'items_tablet',
            [
                'label' => __( 'Items (Tablet)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__('Number of items the carousel will display. Default: at <768px - 3 items.', 'plugin-domain'),
                'default' => 2
            ]
        );

        $this->add_control(
            'items_mobile',
            [
                'label' => __( 'Items (Mobile)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__('Number of items the carousel will display. Default: at <479px - 1 item.', 'plugin-domain'),
                'default' => 1
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_portfolio_carousel');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_portfolio_carousel';

            consulting_show_template('portfolio_carousel', $settings);

        }
    }
}