<html>
  <head>
    <title>Instalasi</title>
    <style>
    .strike {
      text-decoration: line-through;
    }
    </style>
  </head>
  <body>
    <h1>To Do List</h1>
    <form action="#" method="post">
      <table>
        <tr>
          <td>ID</td>
          <td>
            <input type="text" name="id" placeholder="ID" />
          </td>
        </tr>
        <tr>
          <td>Title</td>
          <td>
            <input type="text" name="title" placeholder="Title" />
          </td>
        </tr>
        <tr>
          <td>Status</td>
          <td>
            <label>
              <input type="radio" name="status" /><span>Belum</span>
            </label>
            <label>
              <input type="radio" name="status" /><span>Selesai</span>
            </label>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Simpan" />
          </td>
        </tr>
      </table>
    </form>

    <?php
    $tasks = [
      ["id" => 1, "title" => "Belajar PHP", "status" => "belum"],
      ["id" => 2, "title" => "Kerjakan tugas UX", "status" => "selesai"]
    ];
    ?>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($tasks as $key => $value): ?>
          <tr>
            <td class="task-<?=$value['id']?>"><?=$value['id']?></td>
            <td class="task-<?=$value['id']?>"><?=$value['title']?></td>
            <td class="task-<?=$value['id']?>"><?=$value['status']?></td>
            <td align="center">
              <input type="checkbox" name="" onclick="check(<?=$value['id']?>)" />
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <script>
    function check(id) {
      let class_name = "task-"+id,
          el = document.getElementsByClassName(class_name)

      // console.log(el)

      for (let i = 0; i < el.length; i++)
        el[i].className = el[i].className.indexOf("strike") >= 0? el[i].className.replace(" strike", "") : el[i].className + " strike"
    }
    </script>
  </body>
</html>
