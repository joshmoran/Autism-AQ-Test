tdEl = document.getElementsByTagName( 'td' )

tdEl = addEventListener( 'click', ( e ) => {

    var el = this.propertyName.nextElementSibling()
    alert( el )
    alert( el.childNodes() )
} )


