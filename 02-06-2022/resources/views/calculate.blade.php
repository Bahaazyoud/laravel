@extends('layout.master')

@section('content')
<section class="dec">
<form action="calculation" method="POST">
@csrf

    <div class="form-left-decoration"></div>
    <div class="form-right-decoration"></div>
    <div class="circle"></div>
    <div class="form-inner">
      <h1>Calculator    </h1>
      <input type="text" name="fnum" placeholder="---Please enter first number---">
      <input type="text" name="snum" placeholder="---Please enter second number---">

        <div class="input-group">
        <select name = "operator" class="custom-select" id="inputGroupSelect04">
            <option selected >Choose operator...</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        </div>
        <input type="submit" name="btn" value="calculate">
    </div>
<br><br><br>

</form>
</section>
@endsection
