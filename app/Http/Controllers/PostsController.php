<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
     $posts =[
         
         'my-first-post'=>'<li>Hi there. Happy new year.</li> 
         <li>This is a message returned in JSON FORMAT through the PostsController to the view.</li>
         <li>The task Below is a full CRUD  Single page application to create articles</li>
         <li>The application consists of GET PUT POST DELETE methods. The application was also assembled using VUEjs (this is highlighted 
         in chrome dev tools), NPM and various other technologies.
         <li>The application was also created using laravel framework Version 6 </li>
         <li>You can also watch a demo of this on here and will delete it after https://youtu.be/MClwxAVyvaE</li><br>
',
        'my-second-post'=>'<li>This Message was also created Using ajax XHR request for demostrational purposes and can be located
        in the PostsController.php' 



         
     ];
    return response ()-> json($posts);
        
 
    }
}
