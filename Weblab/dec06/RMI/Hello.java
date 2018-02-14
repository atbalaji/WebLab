import java.rmi.Remote;
import java.*;
import java.rmi.RemoteException;
// Creating Remote interface for our application
public interface Hello extends Remote {
 int add(int a,int b) throws RemoteException;
 int sub(int a,int b) throws RemoteException;
 int mul(int a,int b) throws RemoteException;
 int div(int a,int b) throws RemoteException;
}