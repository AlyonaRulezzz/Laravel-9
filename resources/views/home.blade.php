<h1>Главная страница</h1>

<!-- $db = sqlite_open("db");

$rows = $db->query('SELECT * FROM lib');

foreach($rows as $row) {
  {$row}	
} -->

<div>
  <nav>
    <a href="{{route('home')}}">Главная></a>
    <a href="{{route('about')}}">О нас></a>
    <a href="{{route('contact')}}">Контакты></a>
    <a href="">Список книг с указанием автора</a>
  </nav>
</div>