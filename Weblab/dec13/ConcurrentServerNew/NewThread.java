import java.io.*;
import java.net.*;
class NewThread implements Runnable{
	Socket connectionSocket;
	Thread A;
	NewThread(Socket w){
		t=new Thread(this);
		connectionSocket=w;
		System.out.println("Test");
		t.start();
	}
}