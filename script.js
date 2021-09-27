// const button = document.querySelector('button');

// button.addEventListener('click', event => {
//   button.innerHTML = `Nombre de clics : ${event.detail}`;
// });


function init()
{
    console.log('init();');
    pages.create(30);
}

let pages =
{
    tranform_backup: new Array(),

    create: (n) =>
    {
        let a = 180;
        let z = 0;
        for(let i = 1; i <=n; i++)
        {
            let e = document.createElement('div');
            e.id = 'page' + i;
            e.className = 'page';
            e.style.left = "75%";
            e.style.opacity = '0.50';
            z -= 500;
            a -= 7;
            pages.tranform_backup[e.id] = "translateZ("+ z +"px) rotateY("+ 15 +"deg)";
            e.style.transform = pages.tranform_backup[e.id];
            e.setAttribute('onclick','clickToFront("' + e.id + '");');
            e.innerHTML = text;
            document.getElementById('scene').appendChild(e);
        }
    },

    clickToFront: (id) =>
    {
        console.log('clickToFront("'+id+'");');
        let e = document.getElementById(id);
        e.style.transform = "";
        e.style.opacity = 1;
        e.setAttribute('onclick','pages.clickToBack("' + e.id + '");');
    },

    clickToBack: (id) =>
    {
        console.log('clickToBack("'+id+'");');
        let e = document.getElementById(id);
        e.style.transform = pages.tranform_backup[e.id];
        e.style.opacity = '0.25';
        e.setAttribute('onclick','pages.clickToFront("' + e.id + '");');
    }
}