import java.net.*;
import java.io.*;

 class TcpServer{
 public static void main(String[] args) throws Exception{
	 String clientSentence;
	 String capitalizedSentence;
	 ServerSocket welcomeSocket=new ServerSocket(5432);
	 Socket[] connectionSocket=new Socket[4];
	 int i=0;
	 for(i=0;i<4;i++){
		  connectionSocket[i]=welcomeSocket.accept();
		 BufferedReader inFromClient=new BufferedReader(new InputStreamReader(connectionSocket[i].getInputStream()));
		 DataOutputStream outToClient=new DataOutputStream(connectionSocket[i].getOutputStream());
		 while(true){
		 clientSentence=inFromClient.readLine();
		 System.out.println("Received sentence from Client "+Integer.toString(i+1)+" "+clientSentence);
		 if(clientSentence.equals("End"))
			 break;
		 capitalizedSentence=clientSentence.toUpperCase()+'\n';
		 outToClient.writeBytes(capitalizedSentence);
	 }
		 System.out.println("Connection ended with client "+Integer.toString(i+1));
	 }
 }
}
 
