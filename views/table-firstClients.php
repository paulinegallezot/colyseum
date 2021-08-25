<div class="container-fluid bg-manu p-0">
    <div class="alert-transparent" role="alert">
      <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">
        <h1 class="text-center">Bienvenue au Colyseum</h1>
        <div class="label w-75 p-2 pl-5 mt-4 text-center">
          <h2><span class="badge badge-dark">Nos 20 premiers clients</span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container dotted p-4 mt-4">
    <div class="row">
      <div class="col-6 offset-3">
        <table >
          <thead class="border border-dark">
              <th>id</th>
              <th>lastname</th>
              <th>firstname</th>
              <th>birthdate</th>
              <th>card</th>
              <th>card number</th>
          </thead>
          <tbody>
              <?php foreach($firstClients as $firstClient): ?>
                  <tr>
                      <td class="border border-dark"><?= $firstClient["id"] ?></td>
                      <td class="border border-dark"><?= $firstClient["lastName"] ?></td>
                      <td class="border border-dark"><?= $firstClient["firstName"] ?></td>
                      <td class="border border-dark"><?= $firstClient["birthDate"] ?></td>
                      <td class="border border-dark"><?= $firstClient["card"] ?></td>
                      <td class="border border-dark"><?= $firstClient["cardNumber"] ?></td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>