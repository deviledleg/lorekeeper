<?php

namespace App\Models\Species;

use App\Models\Model;

class Subtype extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'species_id', 'name', 'sort', 'has_image', 'description', 'parsed_description', 'is_visible', 'hash',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subtypes';

<<<<<<< HEAD
=======

    /**
     * Validation rules for creation.
     *
     * @var array
     */
    public static $createRules = [
        'species_id' => 'required',
        'name' => 'required|between:3,100',
        'description' => 'nullable',
        'image' => 'mimes:png',
    ];


    /**
     * Validation rules for updating.
     *
     * @var array
     */
    public static $updateRules = [
        'species_id' => 'required',
        'name' => 'required|between:3,100',
        'description' => 'nullable',
        'image' => 'mimes:png',
    ];

>>>>>>> 4ce3c4c70745c5449056cb191692917ca9946c3f
    /**
     * Accessors to append to the model.
     *
     * @var array
     */
    protected $appends = [
        'name_with_species',
    ];
    /**
     * Validation rules for creation.
     *
     * @var array
     */
    public static $createRules = [
        'species_id'  => 'required',
        'name'        => 'required|between:3,100',
        'description' => 'nullable',
        'image'       => 'mimes:png',
    ];

    /**
     * Validation rules for updating.
     *
     * @var array
     */
    public static $updateRules = [
        'species_id'  => 'required',
        'name'        => 'required|between:3,100',
        'description' => 'nullable',
        'image'       => 'mimes:png',
    ];

    /**********************************************************************************************

        RELATIONS

    **********************************************************************************************/

    /**
     * Get the species the subtype belongs to.
     */
<<<<<<< HEAD
    public function species() {
        return $this->belongsTo(Species::class, 'species_id');
=======
    public function species()
    {
        return $this->belongsTo('App\Models\Species\Species', 'species_id');
>>>>>>> 4ce3c4c70745c5449056cb191692917ca9946c3f
    }

    /**********************************************************************************************

<<<<<<< HEAD
            SCOPES

    **********************************************************************************************/

    /**
     * Scope a query to show only visible subtypes.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed|null                            $user
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible($query, $user = null) {
        if ($user && $user->hasPower('edit_data')) {
            return $query;
        }

        return $query->where('is_visible', 1);
    }

    /**********************************************************************************************

=======
>>>>>>> 4ce3c4c70745c5449056cb191692917ca9946c3f
        ACCESSORS

    **********************************************************************************************/

    /**
     * Displays the subtype's name and species.
     *
     * @return string
     */
<<<<<<< HEAD
    public function getNameWithSpeciesAttribute() {
        return $this->name.' ['.$this->species->name.' Subtype]';
=======
    public function getNameWithSpeciesAttribute()
    {
        return $this->name . ' [' . $this->species->name . ' ' . ucfirst(__('lorekeeper.subtype')) . ']';
>>>>>>> 4ce3c4c70745c5449056cb191692917ca9946c3f
    }

    /**
     * Displays the model's name, linked to its encyclopedia page.
     *
     * @return string
     */
    public function getDisplayNameAttribute() {
        return '<a href="'.$this->url.'" class="display-subtype">'.$this->name.'</a>';
    }

    /**
     * Gets the file directory containing the model's image.
     *
     * @return string
     */
    public function getImageDirectoryAttribute() {
        return 'images/data/subtypes';
    }

    /**
     * Gets the file name of the model's image.
     *
     * @return string
     */
    public function getSubtypeImageFileNameAttribute() {
        return $this->hash.$this->id.'-image.png';
    }

    /**
     * Gets the path to the file directory containing the model's image.
     *
     * @return string
     */
    public function getSubtypeImagePathAttribute() {
        return public_path($this->imageDirectory);
    }

    /**
     * Gets the URL of the model's image.
     *
     * @return string
     */
    public function getSubtypeImageUrlAttribute() {
        if (!$this->has_image) {
            return null;
        }

        return asset($this->imageDirectory.'/'.$this->subtypeImageFileName);
    }

    /**
     * Gets the URL of the model's encyclopedia page.
     *
     * @return string
     */
<<<<<<< HEAD
    public function getUrlAttribute() {
        return url('world/subtypes?name='.$this->name);
=======
    public function getUrlAttribute()
    {
        return url('world/'.__('lorekeeper.subtypes').'?name='.$this->name);
>>>>>>> 4ce3c4c70745c5449056cb191692917ca9946c3f
    }

    /**
     * Gets the URL for a masterlist search of characters of this species subtype.
     *
     * @return string
     */
<<<<<<< HEAD
    public function getSearchUrlAttribute() {
        return url('masterlist?subtype_id='.$this->id);
=======
    public function getSearchUrlAttribute()
    {
        return url('masterlist?'.__('lorekeeper.subtype').'_id='.$this->id);
>>>>>>> 4ce3c4c70745c5449056cb191692917ca9946c3f
    }

    /**
     * Gets the admin edit URL.
     *
     * @return string
     */
    public function getAdminUrlAttribute() {
        return url('admin/data/subtypes/edit/'.$this->id);
    }

    /**
     * Gets the power required to edit this model.
     *
     * @return string
     */
    public function getAdminPowerAttribute() {
        return 'edit_data';
    }
}
