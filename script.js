(function () {
  const imgRep = document.getElementById("imagemRep");
  const nomePeople = document.getElementById("IdNome")
  const spanRep = document.getElementById("IdRepos");
  const perfil = document.getElementById("linkPerfil");

  const github = "https://api.github.com/users";
  const clientId = "808bfc615f7a6d7e5047";
  const clientSecret = "488c2177a91ad67b60d87bdb2a132300bc8916c2";

  async function dadosBoot(bootstrap) {
    const dadosRecebidosTecnologiasWeb = await fetch(
      `${github}/${bootstrap}?clientId=${clientId}&clientSecret=${clientSecret}`);
     
    const tecnologiasWeb = await dadosRecebidosTecnologiasWeb.json();

    return {tecnologiasWeb};
  }

  function dadosBootDoGithub(bootstrap) {
    imgRep.src = `${bootstrap.avatar_url}`;
    nomePeople.innerHTML = `${bootstrap.name}`;
    spanRep.innerHTML = `${bootstrap.public_repos}`;
    perfil.href = `${bootstrap.html_url}`;
  }

  const bootstrap = "twbs";

  dadosBoot(bootstrap).then(data => {dadosBootDoGithub(data.tecnologiasWeb);});

})();