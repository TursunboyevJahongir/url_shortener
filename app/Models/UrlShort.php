<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlShort extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['url', 'short', 'created_at', 'updated_at'];


    public static function getOneViaLang($id, $lang)
    {
        $News = self::where('id', $id)->where('lang', $lang)->with('file')->first();
        return $News;
    }

    public static function generetShortUrl()
    {
        $short = substr(md5(sha1(time() + rand(0, time()))), 0, 6);
        $data = self::where('short', $short)->first();
        if (!is_null($data))
            self::generetShortUrl();
        return $short;
    }
}
