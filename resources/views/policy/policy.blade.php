@include('includes.header-admin')

        <div class="center__Container">
                @include('flash.flash')
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{url('/home')}}">Back</a></span>

                    </p>

                </div>

            </div>


            <div class="main__container">
                <br>
                <a href="{{url('/policy-create/')}}" class="btn btn-success">Create Policy</a>
                <a href="{{url('/sub-policy-create/')}}" class="btn btn-info">Create Sub Policy</a>
                <br><br>
                <h3>Main Policy</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                {{-- <th>Title</th> --}}
                                <th>Policy</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($policies as $policy)
                                    <tr>
                                        {{-- <td>{{$policy->title}}</td> --}}
                                        <td>
                                            <?php echo html_entity_decode(str_limit($policy->policies , $limit = 250, $end = '...' ));?></td>
                                     <td>
                                            <td>
                                                    <div class="dropdown">
                                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                            <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                              {{-- <li><a href="{{url('/create-ranks/')}}">Create</a></li> --}}
                                                              <li><a href="{{url('policy-edit/'.$policy->id)}}">Edit</a></li>
                    
                                                              <li>
                                                                    <form action="{{url('/policy-delete/'.$policy->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                                                        <input  type="submit" value="Delete" />
                                                                        <input type="hidden" name="_method" value="delete" />
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                    </form>
                    
                                                                {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}
                    
                                                            </li>
                                                            </ul>
                                                          </div>
                                              </td>

                                        {{-- <a href="{{url('policy-show/'.$policy->id)}}" class="btn btn-primary btn-xs">
                                            View
                                        </a> &nbsp;
                                        <a href="{{url('policy-edit/'.$policy->id)}}" class="btn btn-info">Edit</a>
                                            &nbsp;
                                        <form action="{{url('/policy-delete/'.$policy->id)}}" method="post" onclick="return confirm('Are you sure?')">
                                            <input  type="submit" value="Delete" class="btn btn-danger btn-xs" />
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form> --}}

                                    </td>
                                    </tr>
                              @endforeach
                            </tbody>
                          </table>

                    </div>
            </div>

            <!-- another code -->


            <div class="main__container">
                <h3>Sub policy</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Title</th>
                                <th>Policy</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($sub_policy as $s_policy)
                                    <tr>
                                        <td>{{$s_policy->policy_title}}</td>
                                        <td><?php echo html_entity_decode(str_limit($s_policy->policy_desc , $limit = 50, $end = '...' ));?></td>
                                        <td>

                                                <div class="dropdown">
                                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                          {{-- <li><a href="{{url('/create-ranks/')}}">Create</a></li> --}}
                                                          <li><a href="{{url('sub-policy-edit/'.$s_policy->id)}}">Edit</a></li>
                
                                                          <li>
                                                                <form action="{{url('/sub-policy-delete/'.$s_policy->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                                                    <input  type="submit" value="Delete" />
                                                                    <input type="hidden" name="_method" value="delete" />
                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                </form>
                
                                                            {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}
                
                                                        </li>
                                                        </ul>
                                                      </div>
                                            {{-- <a href="{{url('sub-policy-show/'.$s_policy->id)}}" class="btn btn-primary btn-xs">View</a> &nbsp;
                                            <a href="{{url('sub-policy-edit/'.$s_policy->id)}}" class="btn btn-info btn-xs">Edit</a>
                                         &nbsp;
                                        <form action="{{url('/sub-policy-delete/'.$s_policy->id)}}" method="post" onclick="return confirm('Are you sure?')">
                                            <input  type="submit" value="Delete" class="btn btn-danger btn-xs" />
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form> --}}

                                    </td>
                                    </tr>
                              @endforeach
                            </tbody>
                          </table>

                    </div>
            </div>

            <!-- en dof this code -->


        </div>

    </div>


</section>
<script src="resources/js/admin.js"></script>

{{-- <script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });


    });


</script> --}}
<!-- script for wysiwyg -->

<!-- copy and paste if need be or uncomment -->

<script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
           width:880,
      });
   });
 </script>
<!-- end of  wysiwyg --?


</body>
</html>

