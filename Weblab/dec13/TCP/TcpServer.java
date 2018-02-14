import java.net.*;
import java.io.*;

 class TcpServer{
 public static void main(String[] args) throws Exception{
	 String clientSentence;
	 String capitalizedSentence;
	 ServerSocket welcomeSocket=new ServerSocket(5436);
	 
	 while(true){
		 Socket connectionSocket=welcomeSocket.accept();
		 BufferedReader inFromClient=new BufferedReader(new InputStreamReader(connectionSocket.getInputStream()));
		 DataOutputStream outToClient=new DataOutputStream(connectionSocket.getOutputStream());
		 while(true){
		 clientSentence=inFromClient.readLine();
		 BufferedReader inFromUser=new BufferedReader(new InputStreamReader(System.in));
		 System.out.println("Received sentence"+clientSentence);
		 capitalizedSentence=inFromUser.readLine()+'\n';
		 outToClient.writeBytes(capitalizedSentence);
	 }
	 }
 }
}
 
