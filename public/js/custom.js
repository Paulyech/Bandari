 // dropdown 0
 const dropdownn = document.querySelector("#dropdown")
 const main = document.querySelector("#maindropitem")
 const nav = document.querySelector('#navmar')

 main.addEventListener('click',()=>{
     if (dropdown.classList.contains('hidden')) {
         dropdown.classList.remove('hidden')
         nav.classList.add('mb-24')
         
     }else{
         dropdownn.classList.add('hidden')
         nav.classList.remove('mb-24')
         
     }
 })
 // dropdown 1
 const dropdownn1 = document.querySelector("#dropdown1")
 const main1 = document.querySelector("#maindropitem1")
 const nav1 = document.querySelector('#navmar1')

 main1.addEventListener('click',()=>{
     if (dropdown1.classList.contains('hidden')) {
         dropdown1.classList.remove('hidden')
         nav1.classList.add('mb-24')
     }else{
         dropdownn1.classList.add('hidden')
         nav1.classList.remove('mb-24')
     }
 })
 // dropdown 2
 const dropdownn2 = document.querySelector("#dropdown2")
 const main2 = document.querySelector("#maindropitem2")
 const nav2 = document.querySelector('#navmar2')

 main2.addEventListener('click',()=>{
     if (dropdown2.classList.contains('hidden')) {
         dropdown2.classList.remove('hidden')
         nav2.classList.add('mb-24')
     }else{
         dropdownn2.classList.add('hidden')
         nav2.classList.remove('mb-24')
     }
 })
 // dropdown 3
 const dropdownn3 = document.querySelector("#dropdown3")
 const main3 = document.querySelector("#maindropitem3")
 const nav3 = document.querySelector('#navmar3')

 main3.addEventListener('click',()=>{
     if (dropdown3.classList.contains('hidden')) {
         dropdown3.classList.remove('hidden')
         nav3.classList.add('mb-24')
     }else{
         dropdownn3.classList.add('hidden')
         nav3.classList.remove('mb-24')
     }
 })




var trodd = document.querySelectorAll('.row-td:nth-child(odd)');
var treven = document.querySelectorAll('.row-td:nth-child(even) ');

for (var i = 0; i < trodd.length; i++) {
    trodd[i].style.backgroundColor = 'white';
    treven[i].style.backgroundColor = '#3490dc';
}