<?php

namespace App\Helpers;

use App\Models\AdminNotification;
use App\Notifications\CompanyNotification;

trait NotificationTrait
{
<<<<<<< Updated upstream
    public function sendUserNotification($user,$title_en,$title_ar,$body_en,$body_ar,$notification_type,$order_id=null,$store_id=null)
    {
        if ($user){
            $notification = new AdminNotification();
            $notification->type = 'User';
            $notification->screen_type = $notification_type;
            $notification->user_id = $user->id;
            $notification->store_id = $store_id;
            $notification->order_id = $order_id;
            $notification->setTranslation('title', 'en', $title_en);
            $notification->setTranslation('title', 'ar', $title_ar);
            $notification->setTranslation('body', 'en', $body_en);
            $notification->setTranslation('body', 'ar', $body_ar);
            $notification->save();
=======
>>>>>>> Stashed changes


    public function sendUserNotification($user, $ad, $title_en, $title_ar, $body_en, $body_ar, $type)
    {
        // $lang = request()->header('lang') ?: 'ar';
        if ($type == 'AllUser') {
            $notification = AdminNotification::create([
                'user_id' => null,
                'type' => $type,
                'ad_id' => !is_null($ad) ? $ad->id : null,

            ]);

        } elseif ($type == 'User') {
            $notification = AdminNotification::create([
                'user_id' => $user->id,
                'type' => $type,
                'ad_id' => !is_null($ad) ? $ad->id : null,
            ]);

        } elseif ($type == 'Company') {
            $notification = AdminNotification::create([
                'company_id' => $user->id,
                'type' => $type,
                'ad_id' => !is_null($ad) ? $ad->id : null,

            ]);
        } else {
            $notification = AdminNotification::create([
                'type' => $type,
                'ad_id' => !is_null($ad) ? $ad->id : null,
            ]);
        }

        $notification->message = $body_ar;
     
        $notification->save();
        if ($type == 'AllUser') {
            foreach ($user as $user_one) {
                send_to_user([$user_one->device_token], $notification, (!is_null($ad) ? $ad->id : null));
            }
        } elseif ($type == 'User') {
            send_to_user([$user->device_token], $notification, (!is_null($ad) ? $ad->id : null));
        } elseif ($type == 'AllCompanies') {
            foreach ($user as $user_one) {
                send_to_company($user_one, $notification);
            }
        } else {
                 send_to_company($user, $notification);

        }
    }
}
