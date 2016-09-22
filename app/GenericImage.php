<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenericImage extends Model
{

    CONST IMAGE_STORAGE_PATH = 'public/assets/user/image/';
    CONST PHOTOSPHERE_STORAGE_PATH = 'public/assets/user/photosphere/';
    CONST VIDEO_STORAGE_PATH = 'public/assets/user/video/';
    CONST VIDEOSPHERE_STORAGE_PATH = 'public/assets/user/videosphere/';
    CONST MODEL_STORAGE_PATH = 'public/assets/user/model/';
    CONST AUDIO_STORAGE_PATH = 'public/assets/user/audio/';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'file_id', 'caption', 'description', 'width', 'height', 'data'
    ];

}
