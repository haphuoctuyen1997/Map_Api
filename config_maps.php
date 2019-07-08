<?php
/***** Include metabox *****/
function location_register_meta_boxes( $meta_boxes ) {
  $prefix = 'tuyen_custom_';
  $meta_boxes[] = array(
    'id'         => 'personal',
    'title'      => 'Option Google Maps',
    'post_types' => 'dia-diem',
    'context'    => 'normal',
    'priority'   => 'high',
    'fields' => array(
      array(
        'name'  => 'Link',
        'desc'  => 'Nhập link được liên kết',
        'id'    => $prefix . 'link',
        'type'  => 'text',
      ),
      array(
        'name'            => 'Thể Loại',
        'id'              => $prefix . 'theloai',
        'type'            => 'select',
        'options' => array(
          array( 'value' => 'default', 'label' => 'mặc định' ),
          array( 'value' => 'coffee', 'label' => 'coffee-tea' ),
          array( 'value' => 'food', 'label' => 'food' ),
          array( 'value' => 'restaurants', 'label' => 'restaurants' ),
          array( 'value' => 'shopping', 'label' => 'shopping' ),
          array( 'value' => 'karaoke', 'label' => 'karaoke' ),
          array( 'value' => 'hotels', 'label' => 'hotels' ),
          array( 'value' => 'travel', 'label' => 'travel' ),
          array( 'value' => 'saloon', 'label' => 'saloon' ),
          array( 'value' => 'clubs', 'label' => 'clubs' ),
          ),
          'multiple'        => false,
          'select_all_none' => false,
        ),
        array(
            'id'   => $prefix . 'address',
            'name' => 'Địa Chỉ',
            'desc'  => 'Nhập vào địa chỉ',
            'type' => 'text',
        ),
        array(
            'id'            => $prefix . 'map',
            'name'          => 'Vị Trí Bản Đồ',
            'type'          => 'osm',
            'address_field' => $prefix . 'address',
            'std'           => '16.063220, 108.205881',
            'api_key'       => 'AIzaSyDQSG_tqtG1xntgdPZfAkDQo7vC68IRjmY',
        ),
    )
  );
  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'location_register_meta_boxes' );

?>
