@extends('../layouts.app')

@section('title-page')Page home @endsection


@section('content')
  <div class="my-form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="my-form__content">
          <form  method="POST" id="formForAdd">
            <div class="content-message"></div>
          <div class="form-group">
              <label for="name-item">Название</label>
              <input type="text" name="name" class="form-control" id="name-item" required>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <div class="form-group">
                  <label for="latitude-item">Широта</label>
                  <input type="number" name="latitude" class="form-control" id="latitude-item" required>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="form-group">
                  <label for="longitude-item">Долгота</label>
                  <input type="number" name="longitude" class="form-control" id="longitude-item" required>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="form-group">
                  <label for="population-item">Кв. населения</label>
                  <input type="number" name="populations" class="form-control" id="population-item" required>
                </div>
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Добавить</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="my-list pt-5">
    <div class="container">
      <div class="row">
        <div class="col">
        <hr>
        <h2>Список всех населенных пунктов</h2>
          <div class="my-list__content">
          <table class="table" id="task-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Широта</th>
                <th scope="col">Долгота</th>
                <th scope="col">Населения</th>
              </tr>
            </thead>
            <tbody>
             
            </tbody>
          </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


