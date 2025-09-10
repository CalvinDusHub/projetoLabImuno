import { StyleSheet, View, Text, TextInput, TouchableOpacity } from "react-native";

export default function Paciente(){
    return (
        <View style={Estilo.container}>
           <View style={Estilo.header}>
                <Text style={Estilo.txtLogin}>Cadastro de Pacientes</Text>
           </View> 
           <View style={Estilo.body}>
                <Text style={Estilo.label}>Nome Completo:</Text>
                <TextInput style={Estilo.input} placeholder="Digite o nome"/>

                <Text style={Estilo.label}>Telefone:</Text>
                <TextInput style={Estilo.input} placeholder="(xx) xxxxx-xxxx" keyboardType="phone-pad" />

                <Text style={Estilo.label}>Email:</Text>
                <TextInput style={Estilo.input} placeholder="exemplo@email.com" keyboardType="email-address" />

                <Text style={Estilo.label}>Data de nascimento:</Text>
                <TextInput style={Estilo.input} placeholder="dd/mm/aaaa" />

                <Text style={Estilo.label}>Periodo:</Text>
                <TextInput style={Estilo.input} placeholder="Ex: Matutino" />

                <Text style={Estilo.label}>Nome da Mãe:</Text>
                <TextInput style={Estilo.input} placeholder="Digite o nome da mãe" />           
           </View>

           <View style={Estilo.footer}>
              <TouchableOpacity 
                style={Estilo.botao} 
                onPress={() => alert("Paciente salvo com sucesso!")}
              >
                <Text style={Estilo.textoBotao}>Salvar</Text>
              </TouchableOpacity>
           </View>
        </View>
    )
}

const Estilo = StyleSheet.create({
    container: {
        flexGrow: 1,
        justifyContent: "center",
        alignItems: "center",
        padding: 20,
        backgroundColor: "#fff"
    },
    header: {
        marginBottom: 20
    },
    txtLogin: {
        fontSize: 22,
        fontWeight: "bold"
    },
    body: {
        width: "100%",
        marginBottom: 30
    },
    label: {
        fontSize: 14,
        color: "#7A7A78",
        marginBottom: 6
    },
    input: {
        backgroundColor: "#E9F8FF",
        width: "100%",
        height: 40,
        padding: 10,
        color: "#7A7A78",
        borderColor: "#C2DDEE",
        borderWidth: 2,
        borderRadius: 10,
        marginBottom: 20
    },
    footer: {
        width: "100%",
        alignItems: "center"
    },
    botao: {
        backgroundColor: "#009AC8",
        width: "80%",
        height: 50,
        justifyContent: "center",
        alignItems: "center",
        borderRadius: 25
    },
    textoBotao: {
        color: "#fff",
        fontWeight: "bold",
        fontSize: 16
    }
});
