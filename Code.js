function doGet(e){
   return HtmlService.createHtmlOutputFromFile('WebApp');
}

function AddRecord(FirstName,LastName){
var url = 'https://docs.google.com/spreadsheets/d/1shU7WxMYOah9xbBAygf25v3jggRTEt7E9mu-LrHG1Ck/edit#gid=0';
var ss= SpreadsheetApp.openByUrl(url);
var webAppSheet = ss.getSheetByName("Sheet1");
webAppSheet.appendRow([FirstName,LastName,new Date()]);

}