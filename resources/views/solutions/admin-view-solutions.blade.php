@include('includes.header-admin')

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{url('/home')}}">Back</a></span>
                    </p>

                </div>
                <a href="{{url('/solutions-create/')}}" class="btn btn-default">Create Solution</a>
            </div>


            <div class="main__container">

                    <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>

                                  {{-- <th>Main Title</th>
                                  <th scope="col">Main Description</th> --}}
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach($solutions as $solution)
                                <tr>

                                 <td>{{$solution->sub_title}}</td>
                                 <td>   <?php echo str_limit(html_entity_decode(strip_tags($solution->sub_description)), $limit = 50, $end = '...'); ?></td>

                                  <td>
                                        <div class="dropdown">
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                  {{-- <li><a href="{{url('/solutions-create/')}}">Create</a></li> --}}
                                                  <li><a href="{{url('/solution-edit-post/'.$solution->id)}}">Edit</a></li>

                                                  <li>
                                                        <form action="{{url('/solution-delete/'.$solution->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                                            <input  type="submit" value="Delete" />
                                                            <input type="hidden" name="_method" value="delete" />
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        </form>

                                                    {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}

                                                </li>
                                                </ul>
                                              </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
            </div>


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

