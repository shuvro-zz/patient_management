@extends('layouts.app')

@section('title', 'Search Patient')
@section('content')




     <section  style="color:#808080;">
       <div class=container>
         <h1 style="text-align:center;     font-family: fantasy;"> Search </h1> 
       </div>
       <hr>
	<form  method="post" >
        <div class="container">

             <input  type="hidden" name="_token" value="{!! csrf_token() !!}">
		    <div class="row">
                    <div class="col-md-1" style="text-align:center;"><label>Name:</label> </div>
                    <div class="col-md-2">
                    <input class="form-control" type="search" placeholder="Enter Name" name="name" >
                    </div>
                     <div class="col-md-1" style="text-align:center;"><label>Age:</label> </div>
                    <div class="col-md-2">
         	    	<input type="number" class="form-control"  placeholder="Enter Age" name="age" min="1" max="120" >
                     </div>
                    <div class="col-md-1" style="text-align:center;"><label>Gender:</label> </div>
                    <div class="col-md-2">
                      <input type="radio" name="gender" id="gender" value="a" checked> All

                              <input type="radio" name="gender" id="gender" value="m" > Male
                          <input type="radio" name="gender" id="gender" value="f"> Female


                        </div>

                        <div class="col-md-2">
                          <div class="form-group">

                              <select class="form-control" id="sel1" name="sort">
                              <option  value="asc">Ascending</option>
                              <option  value="desc">Descending</option>

                            </select>
                          </div>
                        </div>
                        <div class="col-md-1">
                  <button type="submit" class="btn btn-info" style="width:200px">Search</button>
                  </div>
            </div>


            </div>
	</form>

    <hr>

    @if($patient==NULL)
    <p></p>
    @else

                    <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th> Picture </th> 
                                
                               
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>CNIC</th>
                                <th>Age</th>
                                <th>Gender</th>
                                

                            </tr>

                        </thead>
                        <tbody>
                            @foreach($patient as $patients)

                                <tr>

                                    <td>{!! $patients->id !!} </td>
                                    <td>
                                    <a href="{!! action('PatientsController@show', $patients->slug) !!}">
                                    {!! $patients->name !!}
                                   </a>
                                    </td>
                                    <td>    <td>
                                         <img src="\uploads\{!!$patients->slug.".jpg"!!}" alt="Upload Photo" onerror="this.src='\site-content\images\home.jpg'" style="

                                                       object-fit: cover;
                                                          width: 50px;
                                                          height:50px;
                                                           border: 1px solid #ddd;
                                                            border-radius: 4px;
                                                            padding: 5px;



                                                                                 ">
                                         </td> </td> 
                                    <td>{!! $patients->email !!}</td>
                                    <td>{!! $patients->contact !!} </td>
                                    <td>{!! $patients->cnic !!}</td>
                                    <td>{!! $patients->age !!}</td>
                                    <td>{!! $patients->sex !!}</td>
                                    
                                   <!--  <td>{!! $patients->disease !!}</td>
                                    <td>{!! $patients->allergy !!}</td>
                                    <td>{!! $patients->medicine !!}</td>
                                    <td>{!! $patients->diagnosis !!}</td>
                                    <td>{!! $patients->comments !!}</td> -->

                                </tr>

                            @endforeach

                        </tbody>

                    </table>
                    </div>

    @endif


    </section>















@endsection
