<html>
<body>
  <div class="container">
      <h1>users</h1>
      <div class="table-responsive">
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>{{ __('ID') }}</th>
                      <th>{{ __('Name') }}</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                      <tr>
                          <td>{{ $user->id }}</td>
                          <td><a href="{{ url('users/'.$user->id) }}">{{ $user->name }}</a></td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</body>
</html>