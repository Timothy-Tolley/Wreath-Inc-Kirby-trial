document.addEventListener("DOMContentLoaded", function(event) {
  if(location.href.indexOf('projects') > -1 
  || location.href.indexOf('about') > -1 
  || location.href.indexOf('contact') > -1 ){
    document.body.style.opacity = 0
    document.body.style.color = 'white'
    document.body.style.backgroundColor = '#242927'
    setTimeout(() => {
      document.body.style.opacity = 1
      document.body.style.transition = "all 2s"
    }, 50)
  }
})