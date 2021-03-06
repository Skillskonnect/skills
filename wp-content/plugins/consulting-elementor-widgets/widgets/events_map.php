<?php

use Elementor\Controls_Manager;

class Elementor_STM_Events_Map extends \Elementor\Widget_Base {

    public function get_name() {
        return 'stm_events_map';
    }

    public function get_title() {
        return esc_html__('Event Map', 'consulting-elementor-widgets');
    }

    public function get_icon() {
        return 'fa fa-calendar-alt';
    }

    public function get_categories() {
        return [ 'consulting-widgets' ];
    }

    public function add_dimensions($selector = '') {
        $this->start_controls_section(
            'section_dimensions',
            [
                'label' => __( 'Dimensions', 'consulting-elementor-widgets' ),
            ]
        );

        $this->add_responsive_control(
            'margin',
            [
                'label' => __( 'Margin', 'plugin-domain' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    "{{WRAPPER}} {$selector}" => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'padding',
            [
                'label' => __( 'Padding', 'plugin-domain' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    "{{WRAPPER}} {$selector}" => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'map_height',
            [
                'label' => __( 'Map height', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '290px', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'zoom',
            [
                'label' => __( 'Map zoom', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions('.stm-events_map');

    }

    protected function render() {
        if(function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' elementor-consulting-event-map';

            consulting_show_template('events_map', $settings);

        }
    }
}