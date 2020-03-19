window.addEventListener('DOMContentLoaded', function(){

    var doc = document;
    var head = doc.getElementsByTagName("head")[0];
    var meta = doc.createElement("meta");
    meta.setAttribute("name","viewport");
    meta.setAttribute("content","width=device-width");
    head.appendChild(meta);

    var orient = window.onorientation;
    $(window).on("orientationchange resize",function(){
        if (Math.abs(window.orientation) !== 90){
            var doc = document;
            var head = doc.getElementsByTagName("head")[0];
            var meta = doc.createElement("meta");
            meta.setAttribute("name","viewport");
            meta.setAttribute("content","width=device-width");
            head.appendChild(meta);
        }else {
            var doc = document;
            var head = doc.getElementsByTagName("head")[0];
            var meta = doc.createElement("meta");
            meta.setAttribute("name","viewport");
            meta.setAttribute("content","width=1080");
            head.appendChild(meta);
        }
    });
});