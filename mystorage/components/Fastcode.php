<?php
namespace mcramirez\mystorage\Components;
use Mcramirez\Mystorage\Models\Mystorage;

class Fastcode extends \Cms\Classes\ComponentBase
{
    public $data;
    public $type;
    public function componentDetails()
    {
        return [
            'name' => 'Fast Code',
            'description' => 'Make Fast Code'
        ];
    }
    public function defineProperties()
{
    return [
         'code' => [
            'title'       => 'select code in database',
            'type'        => 'dropdown',
            'default'     => ''
         ],
         'size' => [
            'title' => 'size',
            'type' => 'dropdown',
            'default' => '',
            'placeholder' => 'Select a type',
            'options' => ['w-25'=> '25%',
                          'w-50' => '50%', 
                          'w-75' => '75%',
                          'w-100' => '100%']
         ],
         'type' => [
            'title' => 'Type of element',
            'type' => 'dropdown',
            'default' => '',
            'placeholder' => 'Select a type',
            'options' => ['card' => 'card', 
                          'slide' => 'slide',
                          'hero-image' => 'hero-image',
                          'galery'=>'galery']
        ],
        'efect' => [
            'title' => 'efect',
            'type' => 'dropdown',
            'default' => '',
            'depends' => ['type'],
            'placeholder' => 'Select a type'
        ]
        
    ];
}

    /**
     * posts becomes available on the page as {{ component.posts }}
     */
    public function getEfectOptions()
{
    // Load the country property value from POST
    $typeCode = post('type');

    $efect = [
        'card' => ['flex-column' => 'Picture Up', 
                   'flex-column-reverse' => 'Picture Daw',
                   'flex-row' => 'Picture Left',
                   'flex-row-reverse' => 'Picture Right',
                   'card-img-overlay'=>'card background'],
        'slide' =>['none'=>'none'],
        'galery' =>['none'=>'none'],
        'hero-image' =>['position-absolute top-0 start-0'=>'Top Left',
                        'position-absolute top-0 start-50 translate-middle-x'=>'Top Middle',
                        'position-absolute top-0 end-0'=>'Top Right',
                        'position-absolute top-50 start-0 translate-middle-y'=>'Middle Left',
                        'position-absolute top-50 start-50 translate-middle'=>'Middle Middle',
                        'position-absolute top-50 end-0 translate-middle-y'=>'Middle Right',
                        'position-absolute bottom-0 start-0'=>'Botton Left',
                        'position-absolute bottom-0 start-50 translate-middle-x'=>'Botton Middle',
                        'position-absolute bottom-0 end-0'=>'Botton Right']
        
       
    ];

    return $efect[$typeCode];
}
    public function getCodeOptions(){
        $search =[];
        $search[''] = 'select data';
        $searchCode= Mystorage::get();
        foreach ($searchCode as $key) {
            $search[$key->code]= $key->code;
        }
        return $search;
    } 
    public function onRun()
    {
       $type=$this->property('type');
       $code = $this->property('code');
       $this->data = Mystorage::where('code', $code )->first(); 
      
    }
}

