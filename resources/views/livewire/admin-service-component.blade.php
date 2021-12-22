<!-- <div> -->
    <!DOCTYPE html>
    <html>
        <head>
            <title></title>
</head>
<body>

<x-app-layout>
   
   </x-app-layout>
   
   
   <!DOCTYPE html>
   <html lang="en">
     <head>
       
       @include("admin.admincss")
     </head>
     <body>
     <div class="container-scroller">

     @include("admin.navbar") 

      <style>
     nav svg{
         height: 20px;
     }
      

      </style>

    <div class="container" style="padding: 20px 0;">
       <div class="row">
           <div class="col-md-9">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       All Servicces
                   </div>
                   <div class="panel-body">
                        <table class="table table-striped">
                           <thead> 
                               <tr>
                                   <th>Id</th>
                                   <th>Image</th>
                                   <th>Name</th>
                                   <th>Description</th>
                                   <th>Action</th>                              
                                 </tr>
                           </thead>
                           <tbody>
                               @foreach($services as $service)
                                <tr>
                                    <td>{{$service->id}}</td>
                                    <td><img src="{{asset('assets/images/photo')}}/{{$service->image}}"  width = "60" /></td>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->description}}</td>
                                    <td></td>

                                   </tr>
                               @endforeach
                           </tbody>
                         </table>
                         {{$services->Links()}}
                   </div>
               </div>
           </div>
       </div>
    </div> 
   
</div>
      @include("admin.adminscript")

    
    </body>
    </html>




     </body>
   </html>
<!-- </div> -->
