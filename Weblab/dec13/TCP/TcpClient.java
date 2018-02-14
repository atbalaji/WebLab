import java.io.*;
import java.net.*;

class TcpClient{
	public static void main(String[] args) throws Exception{
		
		String sentence;
		String modifiedSentence;
		BufferedReader inFromUser=new BufferedReader(new InputStreamReader(System.in));
		Socket clientSocket=new Socket("localhost",5436);
		DataOutputStream outToServer=new DataOutputStream(clientSocket.getOutputStream());
		BufferedReader inFromServer=new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
		while(true){
		sentence=inFromUser.readLine();
		outToServer.writeBytes(sentence+'\n');
		modifiedSentence=inFromServer.readLine();
		System.out.println("From Server "+modifiedSentence);
		}
		//clientSocket.close();
	
	}
}