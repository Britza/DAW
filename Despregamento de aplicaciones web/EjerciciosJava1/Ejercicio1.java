
import java.util.Scanner;

public class Ejercicio1 {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        System.out.print("Ingrese el valor de la variable 1: ");
        int var1 = sc.nextInt();

        System.out.print("Ingrese el valor de la variable 2: ");
        int var2 = sc.nextInt();

        int suma = var1 + var2;
        int resta = var1 - var2;
        int multiplicacion = var1 * var2;
        int division = var1 / var2;
        int modulo = var1 % var2;

        System.out.println("Suma: " + suma);
        System.out.println("Resta: " + resta);
        System.out.println("Multiplicación: " + multiplicacion);
        System.out.println("División: " + division);
        System.out.println("Módulo: " + modulo);

    }
}