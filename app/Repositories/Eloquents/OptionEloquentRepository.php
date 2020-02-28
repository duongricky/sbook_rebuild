<?php

namespace App\Repositories\Eloquents;

use App\Eloquent\Option;
use App\Repositories\Contracts\OptionRepository;

class OptionEloquentRepository extends AbstractEloquentRepository implements OptionRepository
{
    public function model()
    {
        return new Option;
    }

    public function getData($data = [], $dataSelect = ['*'])
    {
        return $this->model()
        ->select($dataSelect)
        ->where($data)
        ->get();
    }

    public function setting()
    {
        $data['textFooters'] = $this->model()->where(['key' => 'text_footer'])->get();
        $data['banners'] = $this->model()->where(['key' => 'banner'])->get();
        $data['bannerBooks'] = $this->model()->where(['key' => 'banner_book'])->first();
        $data['apps'] = $this->model()->where(['key' => 'app'])->get();
        $data['textBanners'] = $this->model()->where(['key' => 'text_banner'])->get();
        $data['textApps'] = $this->model()->where(['key' => 'app_text'])->get();
        $data['contacts'] = $this->model()->where(['key' => 'contact'])->get();
        $data['address'] = $this->model()->where(['key' => 'address'])->get();
        $data['emails'] = $this->model()->where(['key' => 'email'])->get();

        return $data;
    }

    public function updateImgtOption($value, $key)
    {
        $countOption = $this->model()->where('key', $key)->first();
        $data['key'] = $key;
        if ($countOption) {
            $data['value'] = $value;

            return $countOption->update($data);
        } else {
            $data['value'] = $value;

            return $this->model()->create($data);
        }
        \Cache::forever('textFooters', $this->model()->where(['key' => 'text_footer'])->get());
    }

    public function updateBanner($id, $value)
    {
        $countImgBanner = $this->model()->where('id', $id)->first();
        if ($countImgBanner) {
            $data['id'] = $id;
            $data['value'] = $value;

            return $countImgBanner->update($data);
        } else {
            $data['key'] = 'app';
            $data['value'] = $value;

            return $this->model()->create($data);
        }
        \Cache::forever('textBanners', $this->model()->where(['key' => 'text_banner'])->get());
    }

    public function updateTextApp($id, $value)
    {
        $countTextApp = $this->model()->where('id', $id)->first();
        if ($countTextApp) {
            $data['id'] = $id;
            $data['value'] = $value;

            return $countTextApp->update($data);
        } else {
            $data['key'] = 'app_text';
            $data['value'] = $value;

            return $this->model()->create($data);
        }
        \Cache::forever('textApps', $this->model()->where(['key' => 'app_text'])->get());
    }

    public function deleteApp($id)
    {
        $this->model()->destroy($id);
    }
}
