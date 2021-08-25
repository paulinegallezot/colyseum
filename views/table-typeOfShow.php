<div class="container-fluid bg-manu p-0">
    <div class="alert-transparent" role="alert">
      <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">
        <h1 class="text-center">Bienvenue au Colyseum</h1>
        <div class="label w-75 p-2 pl-5 mt-4 text-center">
          <h2><span class="badge badge-dark">Type de spectacle</span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container dotted p-4 mt-4">
    <div class="row">
      <div class="col-6 offset-5">
        <table >
          <thead class="border border-dark">
              <th>type</th>
          </thead>
          <tbody>
              <?php foreach($showTypes as $showType): ?>
                  <tr>
                      <td class="border border-dark"><?= $showType["type"] ?></td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>