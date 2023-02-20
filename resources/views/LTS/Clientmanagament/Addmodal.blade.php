@extends('LTS.layouts.main')
@section('content-header')

<div class="container-fluid"><br><br><br><br>
                     <!-- row -->
 <div class="row column1">
     <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
          <div class="full graph_head">
            <div class="heading1 margin_0">
              <h2>Add Model No.</h2>
                </div>
                </div>
               <div class="container py-5">
                 <div class="row">
                  <div class="col-md-12">
                     @if(session('status'))
                              <div class="alert alert-success">{{session('status')}}</div>
                              @endif
                     <div id="success_message"></div>
                        <div class="card mt-3">
                          <div class="card-header">
                            <nav class="navbar navbar-light bg-light">
                           <div class="d-grid gap-2 d-md-flex">
                              <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a>
                           </div>     
                        </div>
                           <div class="form-group">
                              <div class="col ms-1 me-2 mt-3">  
                                 <div class="row g-3">
                                    <Form action="{{route('addmodelstore')}}"  method="POST">
                                       @csrf
                                    <div class="col-12">
                                                <label for="inputState" class="form-label">Client<span style="color: red">*</span></label>
                                                <select class="client_name form-control" id="client_name" name="client_name"  required>
                                                   <option value='0'>-- Select Client --</option>
                                                   @foreach($clientman['data']   as $client_name)
                                                   <option value="{{$client_name->client_name}}">{{$client_name->client_name}}</option>
                                                   @endforeach
                                                </select>
                                       </div><br>
                                       <div class="col-12">
                                          <label for="formGroupExampleInput">Brand <span style="color: red">*</span></label>
                                             <select name="brand_name" class="brand_name form-control"  id="brand_name" data-live-search="true"  data-size="8" tabindex="null" required/>
                                             <option value='0'>-- Select Brand --</option>
                                          </select>
                                       </div><br>
                                       <div class="col-12">
                                        <label for="formGroupExampleInput">Product Type <span style="color: red">*</span></label>
                                        <select class="product_type form-control" id="product_type" name="product_type" required>
                                             <option value='0'>-- Select Product --</option>
                                             @foreach($product  as $product)
                                             <option value="{{$product->product_type}}">{{$product->product_type }}</option>
                                             @endforeach
                                       </select>
                                    </div><br>
                                    <div class="col-12">
                                       <label for="text" class="form-label">Modal No. <span style="color: red">*</span></label>
                                       <input type="text" class="model_no form-control" name="model_no"  id="model_no" placeholder="Modal No." required>
                                    </div><br>
                                    <div class="col-4">
                         <input type="submit" class="btn btn-info" value="Submit">
                     </div>
                     </div>
                  </div>
                 </div>    
               </form>  
            <!--------Card close-->
            </div>
          </div>
         </div>
            <!--------Container close-->
      </div>
    </div>
            <!--row close-->
 </div>
 </div>
@endsection
@section('scripts')
<script type="text/javascript">
   $(document).ready(function(){ 

// Client Change
$('#client_name').change(function(){

   // Client id
   var id = $(this).val();

   // Empty the dropdown
   $('#brand_name').find('option').not(':first').remove();
   $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
   // AJAX request 
   $.ajax({
     url: '/Addmodal/clientchangebrand/'+id,
     type: "GET",
     dataType: 'json',
     success:function(response){
              
       var len = 0;
       if(response['data'] != null){
          len = response['data'].length;
       }



       if(len > 0){
          // Read data and create <option >
          for(var i=0; i<len; i++){

                   var id = response['data'][i].id;
                   var brand_name = response['data'][i].brand_name;
                   var idbrand_name = id+'_'+brand_name;
                   var option = "<option value='"+brand_name+"'>"+brand_name+"</option>";
         
             $("#brand_name").append(option); 
             
          }
       }

     }
   });
});
   });

</script>
@endsection