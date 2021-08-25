<div class="container-fluid bg-manu p-0">
    <div class="alert-transparent" role="alert">
      <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">
        <h1 class="text-center">Bienvenue au Colyseum</h1>
        <div class="label w-75 p-2 pl-5 mt-4 text-center">
          <h2><span class="badge badge-dark">Affichage de tous les clients</span></h2>
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
              <?php foreach($clients as $client): ?>
                  <tr>
                      <td class="border border-dark"><?= $client["id"] ?></td>
                      <td class="border border-dark"><?= $client["lastName"] ?></td>
                      <td class="border border-dark"><?= $client["firstName"] ?></td>
                      <td class="border border-dark"><?= $client["birthDate"] ?></td>
                      <td class="border border-dark"><?= $client["card"] ?></td>
                      <td class="border border-dark"><?= $client["cardNumber"] ?></td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>