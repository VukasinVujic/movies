<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="/movies">
  @csrf
    <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Title</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="title" type="text" class="form-control
        {{ $errors->has('title')? 'is-invalid':''}} " value={{ old('title')}}>
        @include('partials.invalid-feedback', ['field'=>'title' ])

      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Genre</label> 
    <div class="col-8">
      <input id="text" name="genre" class="form-control
      {{ $errors->has('genre') ? 'is-invalid' : ''}} " value = {{ old('genre')}} >
      @include('partials.invalid-feedback', ['field'=>'genre'])
    </div>
  </div>

  <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Director</label> 
        <div class="col-8">
        <input type="text" name="director" class="form-control
        {{ $errors->has('director') ? 'is-invalid' : '' }}" value = {{ old('director') }} >
      @include('partials.invalid-feedback', ['field'=>'director'])
            
    </div>
</div>

  <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Year</label> 
        <div class="col-8">
        <input type="text" name="year" class="form-control
        {{ $errors->has('year') ? 'is-invalid' : '' }} " value = {{ old('year') }} >
      @include('partials.invalid-feedback', ['field'=>'year'])
            
    </div>
</div>




<div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Story line</label> 
        <div class="col-8">
        <textarea id="textarea" name="storyline" cols="40" rows="5" class="form-control
        {{ $errors->has('storyline') ? 'is-invalid' : '' }}" > {{ old('storyline') }}
        </textarea>
      @include('partials.invalid-feedback', ['field'=>'storyline'])

    </div>
</div>



  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>