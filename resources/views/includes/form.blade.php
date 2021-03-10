@csrf
<div class="form-group">
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name') ?? $client->name}}">
    @error('name')
        <div class="invalid-feedback">{{$errors->first('name')}}</div>
    @enderror
</div>
<div class="form-group">
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email') ?? $client->email}}">
    @error('email')
        <div class="invalid-feedback">{{$errors->first('email')}}</div>
    @enderror
</div> 