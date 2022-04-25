{include file="header.tpl" assing='check'}
{if $check == "admin"}
  <h3>Formulario para insertar una empresa:</h3>

  <div class="card" style="width: 18rem;">
  <form action="{BASE_URL}CreateCompany" method="post">
  <div class="mb-3">
  <input type="text" class="form-control" placeholder="Empresa" name="empresa" required>
  </div>
  <div class="mb-3">
  <input type="text" class="form-control" placeholder="Informacion" name="informacion" required>
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
  </div>
{/if}
<h3>Empresas:</h3>
{foreach from=$companys item=$company}

  <div class="card" style="width: 85%;">
  <div class="card-body">
    <h5 class="card-title">{$company->empresa}</h5>
    <p class="card-text">{$company->informacion}</p>
    {if $check == "admin"}
       <a href="{BASE_URL}UpdateViewCompany/{$company->id_empresa}" class="card-link">Modificar</a>
       <a href="{BASE_URL}DeleteCompany/{$company->id_empresa}" class="card-link">Eliminar</a>
    {/if}
    <a href="{BASE_URL}ShowGamesOfCompany/{$company->id_empresa}" class="card-link">Juegos</a>
  </div>
</div>
{/foreach}
{include file="footer.tpl"}