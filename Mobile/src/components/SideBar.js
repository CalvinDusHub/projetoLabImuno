import { StyleSheet, TouchableOpacity, View, Text} from "react-native"
import { Ionicons } from "@expo/vector-icons";

export default function SideBar(){
    return(
        <View style={Estilo.sidebar}>
            <TouchableOpacity style={Estilo.iconButton}>
                <Ionicons name="home" size={28} color="white" />
                <Text style={Estilo.text}>HOME</Text>
            </TouchableOpacity>
            <TouchableOpacity style={Estilo.iconButton}>
                <Ionicons name="person" size={28} color="white" />
                <Text style={Estilo.text}>PACIENTES</Text>
            </TouchableOpacity>
            <TouchableOpacity style={Estilo.iconButton}>
                <Ionicons name="clipboard" size={28} color="white" />
                <Text style={Estilo.text}>LAUDOS</Text>
            </TouchableOpacity>
            <TouchableOpacity style={Estilo.iconButton}>
                <Ionicons name="speedometer" size={28} color="white" />
                <Text style={Estilo.text}>ADM</Text>
            </TouchableOpacity>
        </View>
    )
}

const Estilo = StyleSheet.create({
    sidebar: {
        width: 60,
        backgroundColor: "#b8b8b8ff",
        paddingTop: 40,
        alignItems: 'center',
    },
    iconButton: {
        marginVertical: 20,
        alignItems: "center",
    },
    text: {
        fontSize: 10,
    }
})