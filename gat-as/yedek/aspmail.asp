<%
On Error Resume Next
For Each Doldur In Request.Form
	' Post edilen formdan bu adrese gelen bilgiler message de�i�kenine dolduruluyor.
	Message = Message & Doldur & ": " & Request.Form(Doldur) & CHR(10)
Next

Set Mail = Server.CreateObject("Persits.MailSender")
Mail.Host = "mail.gat-as.com"
Mail.Username = "webmail@gat-as.com"
Mail.Password = "Gat123"
Mail.From = "webmail@gat-as.com"
Mail.FromName = "Web Form"
Mail.AddAddress "n.kemalbay@gat-as.com", "Nurkan Kemalbay"
Mail.AddAddress "a.gezer@gat-as.com", "Alev Gezer"
Mail.AddAddress "b.kemalbay@gat-as.com", "B.Kemalbay"
Mail.Subject = "www.gat-as.com Web form üzerinden gelen e-posta"
Mail.Body = Message
Mail.Send

if err Then
	Response.Write err.Description
else
    Response.Redirect("/tesekkur.htm")
end if
%>
