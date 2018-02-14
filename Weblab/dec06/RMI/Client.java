import java.rmi.registry.LocateRegistry;
import java.rmi.registry.Registry;
import java.util.Scanner;
public class Client {
 private Client() {}
 public static void main(String[] args) {
 try {
 // Getting the registry
 Registry registry = LocateRegistry.getRegistry(null);
 // Looking up the registry for the remote object
 Hello stub = (Hello) registry.lookup("Hello");
 // Calling the remote method using the obtained object
 Scanner input= new Scanner(System.in);
 System.out.println("Enter the two numbers");
 int a=input.nextInt();
 int b=input.nextInt();
 System.out.println("Enter 1 for Add 2 for Sub");
 int c=input.nextInt(),d;
 try{
 if(c==1)
	 d=stub.add(a,b);
 else if (c==2)
	 d=stub.sub(a,b);
 else if(c==3)
	 d=stub.mul(a,b);
 else
	 d=stub.div(a,b);
 
 System.out.println("Result is "+ d);
 }
catch(Exception e){
	System.out.println(e.toString());
} 
 } catch (Exception e) {

 System.err.println("Client exception: " + e.toString());
 e.printStackTrace();
 }
 }
}