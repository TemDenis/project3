

<div>

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

   


<div>
   <div class="container" style="padding: 30px 0;">
      <div class="row">
       <div class="col-md-12">
         <div class="panel panel-default">
            <div class="panel-heading">
                 All Team 
            </div>
            <div class="panel-body">
                 <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>TeamId</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Occupation</th>
                            <th>Description</th>   
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $team)
                        <tr>
                             <td>{{$team->id}}</td>
                            <td><img src="{{asset('assets/images/photo')}}/{{$team->image}}"  width = "60" /></td>
                            <td>{{$team->name}}</td>
                            <td>{{$team->occupation}}</td>
                            <td>{{$team->description}}</td>
                         </tr>
                        @endforeach
                    </tbody>
                 </table>
            </div>
         </div>
       </div>
     </div>
   </div>
</div>



   
</div>
      @include("admin.adminscript")
     </body>
   </html>
</div>
