<!-- create.blade.php -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@extends('layouts.app')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .carduper{
      margin-left:350px;
      margin-right:350px;
  }
  html * {
  box-sizing: border-box;
}

p {
  margin: 0;
}

.upload {
  &__box {
    padding: 40px;
  }
  &__inputfile {
    width: .1px;
    height: .1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }
  
  &__btn {
    display: inline-block;
    font-weight: 600;
    color: #fff;
    text-align: center;
    min-width: 116px;
    padding: 5px;
    transition: all .3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: #4045ba;
    border-color: #4045ba;
    border-radius: 10px;
    line-height: 26px;
    font-size: 14px;
    
    &:hover {
      background-color: unset;
      color: #4045ba;
      transition: all .3s ease;
    }
    
    &-box {
      margin-bottom: 10px;
    }
  }
  
  &__img {
    &-wrap {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
    }
    
    &-box {
      width: 200px;
      padding: 0 10px;
      margin-bottom: 12px;
    }
    
    &-close {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 10px;
        z-index: 1;
        cursor: pointer;

        &:after {
          content: '\2716';
          font-size: 10px;
          color: white;
        }
      }
  }
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
</style>


<div class="carduper">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="card-header">
    
    Créer un Article
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{route('addArticleBD')}}">
         @csrf
          <div class="form-group">
              <label for="titre">Titre de l'article:</label>
              <input type="text" class="form-control" name="titre" required/>
          </div>

          <div class="form-group">
              <label for="description">Description :</label>
              <textarea type="text" class="form-control" name="description" required></textarea>
          </div>
          <div class="upload__box">
          <div class="form-group">
                        <label>Photo</label>
                        <input type="file"  name="URL" class="form-control" 
                            placeholder="Choisissez une photo" multiple>
                     </div>
                     
</div>
                     <div class="form-group">
                          <label>Admin :</label>
                          <select name="user_id" class="form-control">
                                        <option value="">Aucune</option>
                                        @foreach ($art as $ar)
                                            @if($ar->user_id==$ar->id)
                                            <option value="{{$ar->id}}" selected>{{$ar->name}}</option>
                                            @else
                                            <option value="{{$ar->id}}" >{{$ar->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                      </div>
                      

          </div>
          <br/>
         <center> 
           <button type="submit" class="btn btn-primary">Créer</button>
                  
        </center>
      </form>
      
  </div>
</div>
@endsection
<script>
  jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
</script>
