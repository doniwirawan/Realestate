<!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form action="{{url('/search')}}"  method="GET"  class="form-a">
        {{ @csrf_field() }}
        <div class="row">
          {{-- <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword" name="name"  value="">
            </div>
          </div> --}}
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="area">Area</label>
              <select class="form-control form-control-lg form-control-a" id="area" name="area" required>
                 <option value="" selected disabled hidden>Choose here</option>
                <option>Ubud</option>
                <option>Canggu</option>
                <option>Kuta</option>
              </select>
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type" name="type" required>
                 <option value="" selected disabled hidden>Choose here</option>
                <option>Land</option>
                <option>Hotel</option>
                <option>Villa</option>
              </select>
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="price">Max Price</label>
              <select class="form-control form-control-lg form-control-a" id="price" name="price" required>
                 <option value="" selected disabled hidden>Choose here</option>
                <option value="500000000">IDR 500,000,000.00</option>
                <option value="1000000000">IDR 1,000,000,000.00</option>
                <option value="5000000000">IDR 5,000,000,000.00</option>
                <option value="10000000000">IDR 10,000,000,000.00</option>
                <option value="50000000000">IDR 50,000,000,000.00</option>
                <option value="10000000000000">IDR 100,000,000,000.00</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b" >Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->