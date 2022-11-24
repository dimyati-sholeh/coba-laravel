<?php

namespace App\Models;

class post 
{
    private static $blog_posts =[
        [
            "title" => "Bakso Bakso",
            "slug" => "bakso-bakso",
            "author" => "Sholahudin Dimyati",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, atque? Ut praesentium a maxime blanditiis libero exercitationem dignissimos sunt atque nihil quis ullam voluptatum explicabo, obcaecati ratione at eius, perferendis dolor qui perspiciatis quae quo. Non neque consequuntur impedit! Omnis iure minima accusantium velit, labore iusto quasi ipsam illo distinctio modi repellendus, vitae, similique doloremque! Alias quaerat minus exercitationem dolor maiores minima corrupti! Nisi eligendi fugiat iure laboriosam tempore saepe facilis, praesentium rerum perspiciatis vitae necessitatibus quia, vero labore voluptatum."
        ],
        [
            "title" => "Mboh Opo",
            "slug" => "mboh-opo",
            "author" => "M. Masisi Shobah Delanov",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque repellat quas neque nesciunt eum praesentium eligendi sunt aspernatur magni incidunt! Accusantium quis maiores deleniti. Eum fugit eos nam et nesciunt molestias error suscipit, quae voluptates autem non quam, exercitationem nostrum modi deserunt. Ipsum, soluta voluptate omnis voluptas natus voluptatum aliquam nisi animi, optio earum incidunt accusamus velit autem atque quam impedit! Ut pariatur fugiat delectus quis laborum voluptatum, ab rem quidem a cumque ducimus nobis dolorum molestias illum natus consectetur. Voluptatibus dicta, blanditiis ipsam eos laboriosam accusantium corrupti et illo eum atque modi odit quasi excepturi, maiores enim odio numquam!"
        ],  
    ]; 

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
