@extends('layout.master')

@section('content')
  <div class="bgded overlay light" style="background-image:url('images/news.png');">
    <section id="services" class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <h6 class="heading font-x2">Hotest and latest news</h6>
      </div>
      <ul class="nospace group elements elements-three">
        <li class="one_third">
          <article><a href="#"><i class="fas fa-hourglass-half"></i></a>
            <h6 class="heading">Sociis natoque penatibus</h6>
            <p>Interdum at congue semper purus nullam quis odio id justo accumsan ullamcorper maecenas vel arcu nulla tincidunt elit ornare.</p>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-paw"></i></a>
            <h6 class="heading">Magnis parturient montes</h6>
            <p>Urna proin venenatis eros viverra ultrices fringilla lectus urna consequat erat eget scelerisque ligula felis nec neque nam.</p>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-sliders-h"></i></a>
            <h6 class="heading">Nascetur ridiculus aenean</h6>
            <p>Vitae ipsum vitae velit porttitor aliquam in quam aliquam ullamcorper sem a auctor dapibus nisi nunc vehicula nunc quis mattis.</p>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-tty"></i></a>
            <h6 class="heading">Ullamcorper neque phasellus</h6>
            <p>Pede turpis at elit nunc at urna sed ligula vivamus vel erat at diam imperdiet pharetra quisque justo turpis mattis ut vitae.</p>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-table"></i></a>
            <h6 class="heading">Aliquet lacus nulla erat</h6>
            <p>Tortor aenean leo ipsum elementum non cursus eu interdum ut risus proin risus nibh viverra eget lobortis feugiat egestas in nisl.</p>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-hand-holding-usd"></i></a>
            <h6 class="heading">Aliquam volutpat curabitur</h6>
            <p>Fusce dignissim neque vitae justo aenean ac urna et leo posuere pretium nunc bibendum enim quis imperdiet elementum dui dolor.</p>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper gradient">
    <div class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <p class="nospace font-xs">Purus ut mi sed velit urna ut</p>
        <h6 class="heading font-x2">Sapien posuere in iaculis</h6>
      </div>
      <ul class="nospace group team">
        <li class="one_third first">
          <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
            <figcaption><strong>A. Doe</strong> <em>Euismod nec hendrerit</em></figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
            <figcaption><strong>B. Doe</strong> <em>Vel velit aliquam massa</em></figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
            <figcaption><strong>C. Doe</strong> <em>Vulputate aliquet purus</em></figcaption>
          </figure>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <section class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <p class="nospace font-xs">Lorem aenean nunc aenean sagittis</p>
        <h6 class="heading font-x2">Imperdiet massa maecenas</h6>
      </div>
      <ul id="latest" class="nospace group">
        <li class="one_third first">
          <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
            <ul class="nospace meta clear">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fas fa-comments"></i> <a href="#">Comments (3)</a></li>
            </ul>
            <div class="excerpt">
              <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
              <p class="heading"><a href="#">Quam justo suscipit at blandit at blandit vitae tellus maecenas</a></p>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
            <ul class="nospace meta clear">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fas fa-comments"></i> <a href="#">Comments (6)</a></li>
            </ul>
            <div class="excerpt">
              <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
              <p class="heading"><a href="#">Commodo mauris a semper posuere sem arcu cursus felis non cursus</a></p>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
            <ul class="nospace meta clear">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fas fa-comments"></i> <a href="#">Comments (10)</a></li>
            </ul>
            <div class="excerpt">
              <time datetime="2045-04-03T08:15+00:00">03 Apr 2045</time>
              <p class="heading"><a href="#">Enim odio in odio suspendisse commodo suscipit nisi nam tellus</a></p>
            </div>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
@endsection