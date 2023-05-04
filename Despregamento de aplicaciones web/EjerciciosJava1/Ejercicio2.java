import java.util.Scanner;

public class Ejercicio2 {

    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);

        System.out.print("Ingrese el valor de la variable 1: ");
        int var1 = sc.nextInt();

        System.out.print("Ingrese el valor de la variable 2: ");
        int var2 = sc.nextInt();

        if (var1 > var2){
            System.out.println("La variable 1 es mayor que la variable 2");
        } else if (var1 < var2) {
            System.out.println("La variable 2 es mayor que la variable 1");
        }else {
            System.out.println("Las variables son iguales");
        }
    }
}
