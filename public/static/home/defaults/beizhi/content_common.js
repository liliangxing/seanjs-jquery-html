function getCookie(Name)			//cookies读取
{
    var search = Name + "="
    if(document.cookie.length > 0)
    {
        var offset = document.cookie.indexOf(search);
        if(offset != -1)
        {
            offset += search.length;
            var end = document.cookie.indexOf(";", offset);
            if(end == -1) end = document.cookie.length;
            return unescape(document.cookie.substring(offset, end))
        }
        else return ""
    }
}
