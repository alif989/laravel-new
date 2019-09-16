<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{


    public $fillable = ['menu_name', 'parents_menu_id'];


    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function childs()
    {
       return $this->hasMany('App\Menu', 'parents_menu_id', 'menu_id');
        //return $this->belongsTo('App\Menu','parent_menus_id','menu_id');
    }
}