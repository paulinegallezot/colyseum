<div class="container-fluid bg-manu p-0">
    <div class="alert-transparent" role="alert">
      <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">
        <h1 class="text-center">Bienvenue au Colyseum!</h1>
        <div class="label w-75 p-2 pl-5 mt-4 text-center">
          <h2><span class="badge badge-dark">Nos clients et leur carte de réduction</span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container dotted p-4 mt-4">
    <div class="row">
      <div class="col-6 offset-3">
        <table >
          <thead class="border border-dark">
              
              <th>Nom</th>
              <th>Prénom</th>
              <th>Date de naissance</th>
              <th>Numéro de carte</th>
              <th>Id</th>
              <th>Carte</th>
              <th>Type de carte</th>
          </thead>
          <tbody>
              <?php foreach($clientsCards as $clientCard): ?>
                  <tr>
                      
                      <td class="border border-dark"><?= $clientCard["lastName"] ?></td>
                      <td class="border border-dark"><?= $clientCard["firstName"] ?></td>
                      <td class="border border-dark"><?= $clientCard["birthDate"] ?></td>
                      <td class="border border-dark"><?= $clientCard["cardNumber"]?></td>
                      <td class="border border-dark"><?= $clientCard["cardTypesId"] ?></td>
                      <td class="border border-dark"><?= $clientCard["card"] ?></td>
                      <td class="border border-dark"><?= $clientCard["type"] ?></td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>